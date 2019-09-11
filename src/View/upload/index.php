<?php require_once VIEW . 'header.php'; ?>

<!-- whole upload form wrapped in 'IF' statement instead of only the button that was shown in course -->

<?php if (isset($_SESSION['userId'])) { ?>
    <!-- upload form start -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <h3>Upload Image or GIF</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="/image/upload" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="filename">Filename / Title</label>
                        <input type="text" name="title" id="filename" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" name="category" id="category">
                            <option value="">Nature</option>
                            <option value="">Urban</option>
                            <option value="">Outer Space</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Upload Type</label>
                        <div class="form-inline">
                            <label for="upload-type">
                                <input type="radio" name="upload-type" onclick="changeUploadType('online-file')" value="online-file" checked /> Online File&nbsp;&nbsp;
                            </label>
                            <label for="upload-type">
                                <input type="radio" name="upload-type" onclick="changeUploadType('local-file')" value="local-file" /> Local File
                            </label>
                        </div>
                    </div>
                    <div class="form-group" id="online-file">
                        <label for="image-url">Image URL</label>
                        <input type="text" name="image-url" id="image-url" class="form-control" />
                    </div>
                    <div class="form-group" id="local-file" style="display:none;">
                        <lable>Choose Local File</lable>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <!-- upload icon added instead of text UPLOAD that was shown in course -->
                                <span class="input-group-text" id="inputGroupFileAddon01"><i class="fa fa-upload" aria-hidden="true"></i></span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="file" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" />
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <button type="submit" class="btn btn-primary btn-lg">Upload</button>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- upload form end -->
<?php } else { ?>
    <p class="text-center mt-3">You should be <b>signed in</b> to upload!</p>
<?php } ?>
<?php require_once VIEW . 'footer.php'; ?>