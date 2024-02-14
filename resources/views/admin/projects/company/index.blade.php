@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row flex-wrap">
        <div class="col-md-2">
            @include('layouts.inc.admin-side-menu')
        </div>
        <div class="col-md-10">
        <div class="row align-items-center py-3">
                    <div class="col-md-4">
                        <h1>Taken</h1>
                    </div>
                    <div class="col-md-4">
                        <form action="" method="GET"
                        class="">
                        <div class="input-group">
                            <input class="form-control" name="search" type="text" placeholder="Zoeken..."
                                aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i
                                    class="fas fa-search">zoeken</i></button>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-4">

                        <div class="dropdown float-end">
<div class="dropdown-toggle p-2 btn btn-primary" type="link" data-bs-toggle="dropdown" aria-expanded="false">
Opties
</div>
<ul class="dropdown-menu">

<li><span class="dropdown-item-text"></span></li>
<li>

<a href="{{ route('admin.projects.tasks.createTask', $project->id) }}" class="dropdown-item">Taak toevoegen</a>
<a href="{{ route('admin.projects.users.userAdd',$project->id) }}" class="dropdown-item">Gebruiker koppelen</a>
{{-- <a href="{{ route('companies.addpersoncompany') }}" class="dropdown-item">Persoon koppelen</a> --}}
</ul>
</div>
</div>
</div>
<div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a href="{{ route('admin.projects.edit',$project) }}" class="nav-link" id="nav-projects-tab">Info</a>
    <a href="{{ route('admin.projects.users.indexUser',$project->id) }}" class="nav-link" id="nav-profile-tab">Gebruikers</a>
    <a href="{{ route('admin.projects.tasks.indexTask',$project->id) }}" class="nav-link" id="nav-contact-tab">Taken</a>
    <a href="{{ route('admin.projects.companies.indexCompany',$project->id)}}" class="nav-link active" id="nav-contact-tab">Bedrijfsgegevens</a>
    </div>
        <div class="card">
                @if (session('message'))
            <div class="alert alert-success text-center"> {{ session('message') }}
                <button class="closebtn float-end" onclick="this.parentElement.style.display='none';">X</button>
            </div>
                @endif
                @if($project->company)
                <div class="card-body">
                <table class="table  table-striped">
                        <thead>
                            <tr>
                                <th>Naam</th>
                                <th>Adres</th>
                                <th>Postcode</th>
                                <th>Telefoonnummer</th>
                                <th>E-mailadres</th>
                                {{-- <th>Bewerken</th>
                                <th>Verwijderen</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $project->company->name }}</td>
                                <td>{{ $project->company->address }}</td>
                                <td>{{ $project->company->zipcode }}</td>
                                <td>{{ $project->company->phone_number }}</td>
                                <td>{{ $project->company->email }}</td>
                                {{-- <td>
                                    <a href="{{ route('admin.projects.companies.editCompany',[$project , $project->company]) }}"
                                        class="nav nav-link text-dark text-decoration-none">Bewerken</a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.projects.companies.destroyCompany', [$project,$project->company]) }}"
                                        class="nav nav-link text-dark text-decoration-none"
                                        onclick="return confirm('Weet u zeker dat u deze Bedrijf wilt verwijderen?');">Verwijderen</a>
                                </td> --}}
                            </tr>
                        </tbody>
                    </table>
                    @else
                <div class="text-center align-items-center">
                    <h2>Er is geen bedrijf gevonden</h2>
                </div>
                @endif
            </div>
            </div>

        </div>

    </div>

</div>
@endsection

