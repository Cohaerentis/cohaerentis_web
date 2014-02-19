<?php die; ?>
<div class="row form-group">
  <div class="col-lg-3 col-md-3 col-sm-3 col-hs-3 col-xs-4 contact-form-label">
    <label class="contact-form-label" for="name">Nombre *</label>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-9 col-hs-9 col-xs-8 contact-form-input">
    [text* name class:form-control class:no-border class:contact-form-input]
    <input type="text" class="form-control no-border contact-form-input" name="name" id="name">
  </div>
</div>
<div class="row form-group">
  <div class="col-lg-3 col-md-3 col-sm-3 col-hs-3 col-xs-4 contact-form-label">
    <label class="contact-form-label" for="email">Email *</label>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-9 col-hs-9 col-xs-8 contact-form-input">
    [text* email class:form-control class:no-border class:contact-form-input]
    <input type="text" class="form-control no-border contact-form-input" name="email" id="email">
  </div>
</div>
<div class="row form-group">
  <div class="col-lg-3 col-md-3 col-sm-3 col-hs-3 col-xs-4 contact-form-label">
    <label class="contact-form-label" for="subject">Asunto *</label>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-9 col-hs-9 col-xs-8 contact-form-input">
    [text* subject class:form-control class:no-border class:contact-form-input]
    <input type="text" class="form-control no-border contact-form-input" name="subject" id="subject">
  </div>
</div>
<div class="row form-group">
  <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12">
    <label class="contact-form-label-wide" for="message">Mensaje</label>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12">
    [textarea* message class:form-control placeholder "Detállanos qué quieres contarnos para poder darte una respuesta rápida y concisa"]
    <textarea name="comment" id="comment" class="form-control" rows="5" aria-required="true" class="comment-textarea"></textarea>
  </div>
</div>
<div class="row form-group">
  <div class="col-lg-12 col-md-12 col-sm-12 col-hs-12 col-xs-12">
    [submit class:btn class:btn-primary class:contact-form-submit class:pull-right "Enviar"]
    <input name="submit" class="btn btn-primary comment-submit pull-right" type="submit" id="submit" value="Enviar">
  </div>
</div>
