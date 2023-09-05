@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">General Settings</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="site_name">Site Name</label>
                                    <input type="text" class="form-control" id="site_name" placeholder="Site Name">
                                </div>
                                <div class="form-group">
                                    <label for="site_description">Site Description</label>
                                    <textarea class="form-control" id="site_description" rows="4" placeholder="Site Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="site_logo">Site Logo</label>
                                    <input type="file" class="form-control-file" id="site_logo">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection

<style>
.form-group {
    margin-bottom: 20px;
}

.form-control {
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-control-file {
    border: none;
    padding: 0;
}

textarea.form-control {
    resize: vertical;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

/* Styles pour la carte */
.card {
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.card-header {
    background-color: #f8f9fa;
    border-bottom: 1px solid #ddd;
    padding: 15px;
}

.card-title {
    font-size: 1.25rem;
    margin-bottom: 0;
}

.card-body {
    padding: 15px;
}

/* Styles pour le contenu principal */
.content-wrapper {
    padding: 20px;
}

/* Styles pour la barre de navigation */
.sidebar {
    background-color: #343a40;
    color: #ffffff;
}

.user-panel {
    padding: 20px;
}

.user-panel .info {
    padding-left: 15px;
}

.user-panel p {
    margin: 0;
    font-weight: bold;
}

/* Styles pour la barre de recherche */
.form-inline .form-control-sidebar {
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #ddd;
    border-radius: 0;
    box-shadow: none;
    padding: 0;
    height: auto;
    font-size: 14px;
}

.form-inline .btn-sidebar {
    background-color: transparent;
    border: none;
    box-shadow: none;
    color: #007bff;
}

/* Styles pour les liens de la barre de navigation */
.nav-link {
    color: #ffffff;
}

/* Styles pour les icônes de la barre de navigation */
.nav-icon {
    font-size: 20px;
    margin-right: 10px;
}

/* Styles pour les miettes de pain (breadcrumb) */
.breadcrumb {
    background-color: transparent;
    margin: 0;
    padding: 0;
    list-style: none;
}

.breadcrumb-item {
    display: inline-block;
    margin-right: 5px;
    font-size: 14px;
}

.breadcrumb-item.active {
    font-weight: bold;
    color: #007bff;
}
</style>