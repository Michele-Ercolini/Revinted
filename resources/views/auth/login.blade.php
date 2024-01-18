<x-layout>
    
    <h1>Accedi</h1>
    
    <section class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                
                <form method="POST" action="{{route("login")}}">
                    @csrf
                    <div class="mb-3">
                        <label for="userEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" name="email">
                    <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="userPassword" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </section>
    
</x-layout>