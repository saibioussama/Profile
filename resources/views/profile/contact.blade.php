<form action="/messages/store" method="post" style="background:#515151;padding:20px 0px;width:100%;margin:0px;" class="row">
    {{csrf_field()}}
    {{method_field('POST')}}
    <div class="col-md-6 col-md-offset-3 form-group">
        <label for="content" style="color:white">content :</label>
        <textarea name="content" id="content" class="form-control" placeholder="content ..." rows="3"></textarea>
        <br>
        <input type="submit" class="btn btn-primary" value="send" style="width:100%">
    </div>
</form>