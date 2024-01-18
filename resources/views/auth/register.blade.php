<x-layout>
    
    <h1>Registrati</h1>
    
    <section class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                
                <form method="POST" action="{{route("register")}}">
                    @csrf
                    <div class="mb-3">
                        <label for="userName" class="form-label">Nome utente</label>
                        <input type="text" class="form-control" id="userName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="userEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" name="email">
                    <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="userPassword" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="passwordConfirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="passwordConfirmation" name="password_confirmation">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </section>
    
</x-layout>