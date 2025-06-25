<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Agbalumo' rel='stylesheet'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>

    h1, h2 {
        font-family: 'Agbalumo', sans-serif;
        text-align: center;
    }

    .form-control {
        background-color: #235a917a;
        text-align: center;
        border-radius: 10px;
        bordercolor: black;
    }

</style>

<div class="input-group">
    <button class="btn btn-outline-secondary" type="button" id="ImageInput" action="{{route('gallery.store')}}">
      <input type="file" class="form-control" id="ImageInput" aria-describedby= aria-label="Upload">
      Upload
  </button>
</div>
