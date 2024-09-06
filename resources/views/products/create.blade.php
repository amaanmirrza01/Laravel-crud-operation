<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark">
        <h3 class="text-white py-3 text-center">Crud Operation</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
            </div>

        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Create Product</h3>
                    </div>
                    <form enctype="multipart/form-data" action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label h5">Name</label>
                                <input value="{{ old('name') }}" type="text" id="name" class="@error('name') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Name" name="name">
                                    @error('name')
                                      <p class="invalid-feedback">{{ $message }}</p>    
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Sku</label>
                                <input value="{{ old('sku') }}" type="text" class=" @error('sku') is-invalid @enderror form-control form-control-lg"
                                    placeholder="sku" name="sku">
                                    @error('sku')
                                      <p class="invalid-feedback">{{ $message }}</p>    
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label h5">Price</label>
                                <input value="{{ old('price') }}" type="text" id="price" class=" @error('price') is-invalid @enderror form-control form-control-lg"
                                    placeholder="price" name="price">
                                    @error('price')
                                      <p class="invalid-feedback">{{ $message }}</p>    
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label for="des" class="form-label h5">Description</label>
                                <textarea value="{{ old('description') }}" name="description" id="des" class="form-control" cols="30" placeholder="Description" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="img" class="form-label h5">Image</label>
                                <input type="file" id="img" class="form-control form-control-lg"
                                    placeholder="Image" name="image">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
