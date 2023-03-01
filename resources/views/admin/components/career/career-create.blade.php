@extends('admin.admin_master')

@section('admen')


<div class="content-body">
    <div class="container-fluid">

        <div class="modal fade" id="addProjectSidebar">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Project</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="text-black font-w500">Project Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Deadline</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Client Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">CREATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!
                    </h4>
                    <p class="mb-0">Your dashboard</p>
                </div>
            </div>
           
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Post a Career</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{route('career.store')}}" enctype="multipart/form-data"   method="post" id="myForm">
                                @csrf

                                @method("POST")

                                @if (count($errors))
                                <div class="alert alert-danger alert-dismissible alert-alt solid fade show">
                                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
                                    <strong>Error!</strong> 
                                    <ul>
                                    @foreach ($errors->all() as $message )
                                    <li>{{ $message}}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="form-group mb-4">
                                    <label class="col-sm-2 col-form-label card-title text-primary">Title</label> <br>
                                    <div class="col-sm-10">
                                    <textarea class="form-control bg-light " name="title" rows="4" id="comment" style="height: 100px;"
                                    placeholder="Title Here!"></textarea>                                    </div>
                                </div>
                              
                                <div class="form-group mb-4">
                                    <label class="col-sm-2 col-form-label card-title text-primary">Type of Career</label> <br>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-light " name="type" type="text"
                                    placeholder="Type Here!" >                 
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-sm-2 col-form-label card-title text-primary">Company Name</label> <br>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-light " name="company_name" type="text"
                                    placeholder="Type Here!">                 
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="col-sm-2 col-form-label card-title text-primary">Salary</label> <br>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-light " name="salary" type="text"
                                    placeholder="Type Here!">                 
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="col-sm-2 col-form-label card-title text-danger">Expire Date</label> <br>
                                    <div class="col-sm-10">
                                    <input type="date" class="datepicker-default form-control picker__input" name="expiredate" id="">
                                    </div>
                                </div>
                                <div class="input-group mb-3 mt-4 col-md-10  form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload Image</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file"name="image"  id="image" accept="image/*" onchange="loadFile(event)"
                                        class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="input-group mb-3 mt-4 form-group " >
                                    <img src="" id="output" alt="" style="max-height: 200px" style="">
                                </div>
                                
                                


                                <div class="form-group" >
                                    <label class="col-sm-2 col-form-label card-title text-primary">Description</label><br>
                                    <div class="col-sm-12 ">
                                        <textarea name="detail" type="text"  id="editor" cols="30" rows="20">
                                            
                                        </textarea>
                                    </div>
                                </div>


                                


                                <input type="submit" value="Post" class="btn btn-primary">
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
        
            rules: {
                title: {
                    required : true,
                }, image: {
                    required : true,
                }, description: {
                    required : true,
                }, type: {
                    required : true,
                }, salary: {
                    required : true,
                    number:true,
                }, company_name: {
                    required : true,
                }, expiredate:{
                    required : true,
                    date: true,
                }
                
                
            },
            messages :{
                title: {
                    required : 'Please Enter Title    ',
                },

                image: {
                    required : 'Please Choose Image',
                },
                
                description: {
                    required : 'Please Enter Title    ',

                },
                type: {
                    required : 'Please Enter Type of News    ',

                },salary:{
                    required : 'Please Enter Salary    ',
                },company_name:{
                    required : 'Please Enter Company Name',

                },salary:{
                    required : 'Please Enter Salary    ',

                },expiredate:{
                    required : 'Please Enter Expire Date    ',
                    

                }

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>
<script type="text/javascript">
        
    var loadFile = function(event) {
var output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
output.onload = function() {
  URL.revokeObjectURL(output.src) // free memory
}
};

</script>

@endsection

@section("editor")
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/super-build/ckeditor.js"></script>
       
 <script>
     // This sample still does not showcase all CKEditor 5 features (!)
     // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
     CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
         // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
         toolbar: {
             items: [
                 'exportPDF','exportWord', '|',
                 'findAndReplace', 'selectAll', '|',
                 'heading', '|',
                 'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                 'bulletedList', 'numberedList', 'todoList', '|',
                 'outdent', 'indent', '|',
                 'undo', 'redo',
                 '-',
                 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                 'alignment', '|',
                 'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                 'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                 'textPartLanguage', '|',
                 'sourceEditing'
             ],
             shouldNotGroupWhenFull: true
         },
         // Changing the language of the interface requires loading the language file using the <script> tag.
         // language: 'es',
         list: {
             properties: {
                 styles: true,
                 startIndex: true,
                 reversed: true
             }
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
         heading: {
             options: [
                 { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                 { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                 { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                 { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                 { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                 { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                 { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
             ]
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
         placeholder: 'Content Here!',
         // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
         fontFamily: {
             options: [
                 'default',
                 'Arial, Helvetica, sans-serif',
                 'Courier New, Courier, monospace',
                 'Georgia, serif',
                 'Lucida Sans Unicode, Lucida Grande, sans-serif',
                 'Tahoma, Geneva, sans-serif',
                 'Times New Roman, Times, serif',
                 'Trebuchet MS, Helvetica, sans-serif',
                 'Verdana, Geneva, sans-serif'
             ],
             supportAllValues: true
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
         fontSize: {
             options: [ 10, 12, 14, 'default', 18, 20, 22 ],
             supportAllValues: true
         },
         // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
         // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
         htmlSupport: {
             allow: [
                 {
                     name: /.*/,
                     attributes: true,
                     classes: true,
                     styles: true
                 }
             ]
         },
         // Be careful with enabling previews
         // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
         htmlEmbed: {
             showPreviews: true
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
         link: {
             decorators: {
                 addTargetToExternalLinks: true,
                 defaultProtocol: 'https://',
                 toggleDownloadable: {
                     mode: 'manual',
                     label: 'Downloadable',
                     attributes: {
                         download: 'file'
                     }
                 }
             }
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
         mention: {
             feeds: [
                 {
                     marker: '@',
                     feed: [
                         '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                         '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                         '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                         '@sugar', '@sweet', '@topping', '@wafer'
                     ],
                     minimumCharacters: 1
                 }
             ]
         },
         // The "super-build" contains more premium features that require additional configuration, disable them below.
         // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
         removePlugins: [
             // These two are commercial, but you can try them out without registering to a trial.
             // 'ExportPdf',
             // 'ExportWord',
             'CKBox',
             'CKFinder',
             'EasyImage',
             // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
             // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
             // Storing images as Base64 is usually a very bad idea.
             // Replace it on production website with other solutions:
             // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
             // 'Base64UploadAdapter',
             'RealTimeCollaborativeComments',
             'RealTimeCollaborativeTrackChanges',
             'RealTimeCollaborativeRevisionHistory',
             'PresenceList',
             'Comments',
             'TrackChanges',
             'TrackChangesData',
             'RevisionHistory',
             'Pagination',
             'WProofreader',
             // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
             // from a local file system (file://) - load this site via HTTP server if you enable MathType
             'MathType'
         ]
     });
 </script>
@endsection