<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Test Flex</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-between align-items-center flex-wrap">
            <div class="col-lg-4 col-md-12 mb-3 mb-lg-0 d-flex justify-content-center">
                <button class="btn btn-primary me-3">Tambah</button>
                <button class="btn btn-primary me-3">Import</button>
                <button class="btn btn-primary">Export</button>
            </div>
            <div class="col-lg-4 col-md-6">
                <input type="text" class="form-control mb-3 mb-md-0" placeholder="Search">
            </div>
            <div class="col-lg-4 col-md-6">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Tahun</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
</body>
</html>