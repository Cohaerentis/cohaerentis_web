#!/bin/bash

# CONFIG paths
root_path() {
   SOURCE="${BASH_SOURCE[0]}"
   DIR="$( dirname "$SOURCE" )"
   while [ -h "$SOURCE" ]
   do
     SOURCE="$( readlink "$SOURCE" )"
     [[ $SOURCE != /* ]] && SOURCE="$DIR/$SOURCE"
     DIR="$( cd -P "$( dirname "$SOURCE"  )" && pwd )"
   done
   DIR="$( cd -P "$( dirname "$SOURCE" )" && pwd )"

   echo "$DIR"
}

BIN_PATH=`root_path`
INCLUDE_PATH="$BIN_PATH/bootstrap"
APP_LESS="$BIN_PATH/app.less"
CSS_PATH="$BIN_PATH/../css"
MAIN_CSS="$CSS_PATH/main.css"
MAIN_MIN_CSS="$CSS_PATH/main.min.css"
RECESS_BIN=/usr/bin/recess
if [ ! -x "$RECESS_BIN" ]; then RECESS_BIN=/usr/local/bin/recess; fi

if [ ! -x "$RECESS_BIN" ]; then
   echo "ERROR : Recess is not globally installed. Please use 'npm install recess -g' to install it"
   exit 1
fi

less=`basename "$APP_LESS"`
css=`basename "$MAIN_CSS"`
echo "Compiling '$less' to '$css'"
$RECESS_BIN --includePath "$INCLUDE_PATH" --compile "$APP_LESS" > "$MAIN_CSS"

mincss=`basename "$MAIN_MIN_CSS"`
echo "Compressing '$less' to '$mincss'"
$RECESS_BIN --includePath "$INCLUDE_PATH" --compress "$APP_LESS" > "$MAIN_MIN_CSS"

if [ $EUID -eq 0 ]; then
   echo "Setting owner and permissions to css files"
   chmod 664 "$MAIN_CSS"
   chmod 664 "$MAIN_MIN_CSS"
   chown www-data:www-data "$MAIN_CSS"
   chown www-data:www-data "$MAIN_MIN_CSS"
fi
