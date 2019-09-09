<?php require_once VIEW . 'header.php'; ?>
<!-- upload form start -->
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <h3>Upload Image or GIF</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="filename">Filename / Title</label>
                <input type="text" name="filename" id="filename" class="form-control" />
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" class="form-control" rows="3"></textarea>
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
                        <input type="radio" name="upload-type" />Online File
                    </label>
                    <label for="upload-type">
                        <input type="radio" name="upload-type" /> Local File
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="image-url">Image URL</label>
                <input type="text" name="image-url" id="image-url" class="form-control" />
            </div>
            <div class="form-group">
                <lable>Choose Local File</lable>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" />
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary btn-lg">Upload</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- upload form end -->

<?php require_once VIEW . 'footer.php'; ?>