{{-- Page profile des stagiaires  --}}
@extends('stagiaires.layoutStagiaire')
@section('Title' , 'Profile')
@section('Content')
<section >
        <div class="container py-5">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item active" aria-current="page">Profile :</li>
                </ol>
              </nav>
            </div>
          </div>
      
          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="/Images/5352140.png" alt="avatar"  style="width: 90px;">
                  
                  <h5 class="my-3">{{ Auth::user()->name}} {{ Auth::user()->prenom}} </h5>

                  <p class="text-muted mb-1">Stagiaire</p>
                  
                  <div class="d-flex justify-content-center mb-2">
                    <button type="button" class="btn btn-primary"></button>
                    <button type="button" class="btn btn-outline-primary ms-1"></button>
                  </div>
                </div>
              </div>
              <div class=" mb-lg-0">
                <div class="card-body p-0">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Nom complet :</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ Auth::user()->name}} {{ Auth::user()->prenom}}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Adresse-mail :</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Telephone :</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ Auth::user()->telephone }}</p>
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Role :</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Stagiaire (Service informatique)</p>
                    </div>
                    
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Domaine</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Stagiaire</p>
                    </div>
                  </div>
                  <hr>
                  </div>
                </div>
              </div>        
</section>
@endsection