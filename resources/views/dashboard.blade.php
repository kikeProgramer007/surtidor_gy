<x-app-layout>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-6 mb-0">
                    <h1> {{ __('Dashboard') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form method="POST" enctype="multipart/form-data" action=""
                autocomplete="off" class="needs-validation" novalidate>
                @method('POST')
                @csrf
                <div class="card card-secondary card-outline">
                    <div class="card-body">
                        {{ __("You're logged in!") }}
                        <!-- alert -->
                        {{-- @if ($errors->any())
                            <div class="row ">
                                <div class="col-md-6 offset-md-3">
                                    <div class="alert alert-danger alert-dismissible">
                                        
                                    </div>
                                </div>
                            </div>
                        @endif --}}

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                            
                            </div>
                            <div class="col-sm-6">
                                
                            </div>
                        </div>

                    </div><!--/body card-->

                </div><!--/CARD FIN-->
            </form>

        </div><!-- /.container-fluid -->
    </section><!-- /.content -->

</x-app-layout>
