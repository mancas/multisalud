<?php
App::uses('AppHelper', 'View/Helper');

class AjaxFormHelper extends AppHelper {

    public function __construct(View $view, $settings = array())
    {
        parent::__construct($view, $settings);
    }

    public function ajaxFormScript($selector, $loaderSelector = null)
    {
        $this->ajaxCallFormHeader("$('$selector').submit(function(e){", $loaderSelector);
    }

    public function ajaxCallFormHeader($jqueryHeader, $loaderSelector = null)
    {
        $script = $jqueryHeader . $this->getBodyAjaxRequest($loaderSelector) . $this->getJqueryClose();

        $this->printScript($script);
    }

    public function getBodyAjaxRequest($loaderSelector = null)
    {
        return "e.preventDefault();
                var form = $(this);
                var loader = form.find('$loaderSelector');
                var notifications = form.find('.form-notifications');
                loader.show();
                $.ajax({url: form.attr('action'), type: form.attr('method'), data: form.serialize()}).done(function(res){
                    loader.hide();
                    if (res.ok == false) {
                        notifications.addClass('alert-error');
                    }
                    else {
                        notifications.addClass('alert-info');
                    }
                    notifications.children('span').html(res.message);
                    notifications.slideDown();
            });";

            /** This is to implements callbacks
            *
            *   var callbacks = form.attr('data-callback');
            *    if (callbacks) {
            *       var array_callbacks = callbacks.split(' ');
            *       for(var i=0; i<array_callbacks.length; i++) {
            *           var callback = array_callbacks[i];
            *           eval(callback);
            *       }
            *   }
            *
            */
    }

    public function getJqueryClose()
    {
        return "});";
    }

    public function printScript($script)
    {
        print($script);
    }
}