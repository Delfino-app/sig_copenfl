@extends('layout.template')

@section('titulo','Home')

@section('conteudo')
<div id="content" class="content">

    <!-- begin page-header -->
    <h1 class="page-header">Dashboard</h1>
    <!-- end page-header -->
    
    <!-- begin row -->
    <div class="row">
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                <div class="stats-info">
                    <h4>Inscrições Presenciais</h4>
                    <p>3,291,922</p>	
                </div>
                <div class="stats-link">
                    <a href="javascript:;">Ver Detalhes <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-info">
                <div class="stats-icon"><i class="fa fa-globe"></i></div>
                <div class="stats-info">
                    <h4>Inscrições Online</h4>
                    <p>20.44%</p>	
                </div>
                <div class="stats-link">
                    <a href="javascript:;">Ver Detalhes <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-orange">
                <div class="stats-icon"><i class="fa fa-users"></i></div>
                <div class="stats-info">
                    <h4>Total Inscrições</h4>
                    <p>1,291,922</p>	
                </div>
                <div class="stats-link">
                    <a href="javascript:;">Ver Detalhes <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-clock"></i></div>
                <div class="stats-info">
                    <h4>Inscrições Pendentes</h4>
                    <p>233</p>	
                </div>
                <div class="stats-link">
                    <a href="javascript:;">Ver Detalhes <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
    </div>
    <!-- end row -->
</div>
@endsection