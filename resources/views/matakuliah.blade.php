<!doctype html>
<html lang="en">
  <head>
    <title>Tugas Praktikum 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="mt-5">Daftar Mata Kuliah</h1>
      <div class="content">
        <div class="row">
          @foreach ($matkul as $matkul)
            <div class="col-sm-6 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-10">
                      <h4 class="card-title">{{ $matkul->nama_mk }} (<span style="color: red">{{ $matkul->kode_mk }}</span>)</h4>
                    </div>
                    <div class="col-sm-2 d-flex justify-content-end">
                      <p>{{ $matkul->sks }} SKS</p>
                    </div>
                  </div>
                  <p class="card-text">{{ $matkul->nama_dosen }}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>