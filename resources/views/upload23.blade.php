<h1>File upload</h1>

<form action="fileupload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"/> <br><br>
    <button type="submit">Upload File</button>
</form>