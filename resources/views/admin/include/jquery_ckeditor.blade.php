{{--<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>--}}
{{--<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>--}}

<script src="{{ asset('assets/panel/js/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/panel/js/ckeditor/adapters/jquery.js') }}"></script>
<script>
//    $('textarea').ckeditor();
//      $('.textarea').ckeditor(); // if class is prefered.

    {{--var route_prefix = "{{ url(config('lfm.url_prefix')) }}";--}}
{{--    var element = '{{ isset($element)?$element:'.editor' }}'--}}
    var options = {
        entities: false,
        extraAllowedContent: '*[*]{*}(*)',
        height: 300,
        /*filebrowserImageBrowseUrl: route_prefix + '?type=Files',
        filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
        filebrowserBrowseUrl: route_prefix + '?type=Files',
        filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}',
        extraPlugins: 'youtube,font,justify,lineheight,autocorrect,bootstrapTabs,pastetext', */
        enterMode: CKEDITOR.ENTER_BR,
    };
    $('.custom-ckeditor').ckeditor(options);

</script>