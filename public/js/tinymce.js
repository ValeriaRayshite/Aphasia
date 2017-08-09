var editor_config = {
    path_absolute : "/",
    selector: "textarea",
    plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code jbimages'
    ],
    menubar: false,
    toolbar: "insertfile undo redo | styleselect | bullist numlist outdent indent | link image media | code jbimages",
    relative_urls: false,
    file_browser_callback : true
  };

  tinymce.init(editor_config);
