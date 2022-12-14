<?php $title = 'Posts edit'?>
@include('admin.parts.head')

<body>
<!--<div class="splash active">
    <div class="splash-icon"></div>
</div>-->

<div class="wrapper">
    @include('admin.parts.sidebar')
    <div class="main">
        @include('admin.parts.head')
        <main class="content">
            <div class="container-fluid">

                <div class="header">
                    <h1 class="header-title">
                       Post edit
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard-default.html">Admin panel</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Post edit</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
                                    @method('put')
                                    @csrf
                                    <div class="row">
                                        <div class="col-xs-12 col-md-8">
                                            <div class="mb-3">
                                                <label class="form-label" for="toastr-title">Title</label>
                                                <input id="title" name="title" type="text" class="form-control" placeholder="Enter a title" value="{{$post->title}}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="toastr-message">Message</label>
                                                <textarea rows="10" id="content" name="content" type="text" class="form-control" placeholder="Enter a message">{{$post->content}}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="toastr-title">URL image</label>
                                                <input id="image" name="image" type="text" class="form-control" placeholder="Enter a url" value="{{$post->image}}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-primary me-1" id="toastr-show">Edit post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('admin.parts.footer')
    </div>
</div>

<!--<svg width="0" height="0" style="position:absolute">
    <defs>
        <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
            <path
                d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
            </path>
        </symbol>
    </defs>
</svg>-->
<script src="{{ asset('admin/js/app.js?v='.config('app.version')) }}"></script>

<script>
    // Toastr
    document.addEventListener("DOMContentLoaded", function() {
        var currentMessageIndex = -1;

        function getMessage() {
            var messages = [
                "My name is Inigo Montoya. You killed my father. Prepare to die!",
                "Are you the six fingered man?",
                "Inconceivable!",
                "I do not think that means what you think it means.",
                "Have fun storming the castle!",
            ];
            currentMessageIndex++;
            if (currentMessageIndex === messages.length) {
                currentMessageIndex = 0;
            }
            return messages[currentMessageIndex];
        };
        $("#toastr-show").click(function() {
            var message = $("#toastr-message").val() || getMessage();
            var title = $("#toastr-title").val() || "";
            var type = $("#toastr-type").val();
            toastr[type](message, title, {
                positionClass: $("input[name=\"toastr-position\"]:checked").val(),
                closeButton: $("#toastr-close").prop("checked"),
                progressBar: $("#toastr-progress-bar").prop("checked"),
                newestOnTop: $("#toastr-newest-on-top").prop("checked"),
                rtl: $("body").attr("dir") === "rtl" || $("html").attr("dir") === "rtl",
                timeOut: $("#toastr-duration").val()
            });
        });
        $("#toastr-clear").on("click", function() {
            toastr.clear();
        });
    });
</script>
</body>

</html>
