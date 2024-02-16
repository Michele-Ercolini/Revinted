<x-layout>

    <h1>Crea il tuo prodotto</h1>
    
    <section class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="productTitle" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="productTitle" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Descrizione</label>
                        <input type="text" class="form-control" id="productDescription" name="description">
                    </div>
                    <div class="mb-3">
                        <label for="productCategory" class="form-label">Categoria</label>
                        <input type="text" class="form-control" id="productCategory" name="category">
                    </div>
                    <div class="mb-3">
                        <label for="productImg" class="form-label">Carica immagine</label>
                        <input type="file" class="form-control" id="productImg" name="img">
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Prezzo</label>
                        <input type="number" step="0.01" class="form-control" id="productPrice" name="price">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </section>

</x-layout>