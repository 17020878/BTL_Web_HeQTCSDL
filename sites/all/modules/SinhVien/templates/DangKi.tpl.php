<p class="h2 text-center">Đăng kí</p>
<form action="<?php echo base_path().'dangki' ?>" method="post">
    <div class="container22">
        <div class="preview text-center">
            <img class="preview-img" src="http://simpleicon.com/wp-content/uploads/account.png" alt="Preview Image" width="200" height="200"/>
            <div class="browse-button">
                <i class="fa fa-pencil-alt"></i>
                <input class="browse-input" onchange="readURL(this);" accept="image/*" type="file"  name="UploadedFile" />
            </div>
            <span class="Error"></span>
        </div>
    </div>
    <div class="form-group">
        <label>Full Name:</label>
        <input class="form-control" type="text" name="fullname" required placeholder="Enter Your Full Name"/>
        <span class="Error"></span>
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input class="form-control" type="email" name="email" required placeholder="Enter Your Email"/>
        <span class="Error"></span>
    </div>
    <div class="form-group">
        <label>Password:</label>
        <input class="form-control" type="password" name="password" required placeholder="Enter Password"/>
        <span class="Error"></span>
    </div>
    <div class="form-group">
        <label>Gender:</label><br/>
        <label><input type="radio" name="gender" required value="Male" checked /> Male</label>
        <label><input type="radio" name="gender" required value="Female" /> Female</label>
        <label><input type="radio" name="gender" required value="Other" /> Other</label>
        <span class="Error"></span>
    </div>
    <div class="form-group">
        <input class="btn btn-primary btn-block" type="submit" value="Submit" name="upload"/>
    </div>
    <button type="submit" class="dangnhap" >Đăng nhập</a></button>
</form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
<style>

    .container22
    {
        width: 464px;
        margin: 20px auto;
    }

    .preview
    {
        padding: 10px;
        position: relative;
    }

    .preview i
    {
        color: white;
        font-size: 35px;
        transform: translate(50px,130px);
    }

    .preview-img
    {
        border-radius: 100%;
        box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.7);
    }

    .browse-button
    {
        width: 200px;
        height: 200px;
        border-radius: 100%;
        position: absolute; /* Tweak the position property if the element seems to be unfit */
        top: 10px;
        left: 132px;
        background: linear-gradient(180deg, transparent, black);
        opacity: 0;
        transition: 0.3s ease;
    }

    .browse-button:hover
    {
        opacity: 1;
    }

    .browse-input
    {
        width: 200px;
        height: 200px;
        border-radius: 100%;
        transform: translate(-1px,-26px);
        opacity: 0;
    }

    .form-group
    {
        width:  250px;
        margin: 10px auto;
    }

    .form-group input
    {
        transition: 0.3s linear;
    }

    .form-group input:focus
    {
        border: 1px solid crimson;
        box-shadow: 0 0 0 0;
    }

    .Error
    {
        color: crimson;
        font-size: 13px;
    }

    .Back
    {
        font-size: 25px;
    }
</style>

<!--<script type="text/javascript">-->
<!--    function readURL(input) {-->
<!--        if (input.files && input.files[0]) {-->
<!---->
<!--            var reader = new FileReader();-->
<!---->
<!--            reader.onload = function(e) {-->
<!--                $('.image-upload-wrap').hide();-->
<!---->
<!--                $('.file-upload-image').attr('src', e.target.result);-->
<!--                $('.file-upload-content').show();-->
<!---->
<!--                $('.image-title').html(input.files[0].name);-->
<!--            };-->
<!---->
<!--            reader.readAsDataURL(input.files[0]);-->
<!---->
<!--        } else {-->
<!--            removeUpload();-->
<!--        }-->
<!--    }-->
<!---->
<!--    function removeUpload() {-->
<!--        $('.browse-input').replaceWith($('.browse-input').clone());-->
<!--        $('.file-upload-content').hide();-->
<!--        $('.image-upload-wrap').show();-->
<!--    }-->
<!--    $('.image-upload-wrap').bind('dragover', function () {-->
<!--        $('.image-upload-wrap').addClass('image-dropping');-->
<!--    });-->
<!--    $('.image-upload-wrap').bind('dragleave', function () {-->
<!--        $('.image-upload-wrap').removeClass('image-dropping');-->
<!--    });-->
<!---->
<!--</script>-->
<!---->















