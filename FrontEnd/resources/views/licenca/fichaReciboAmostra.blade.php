<div class="row">
    <div class="col-lg-12 content-recibo bg-white" style="padding:20px;">
        <div class="text-center heade-top-content">
            <img width="50" src="{{asset('img/logo.png')}}">
            <p class="heade-top">
                Ordem de Enfermagem de Angola<br>
                <span class="decreto">
                Decreto Presidencial nº 179/10</span><br>
                <b>Conselho Provincial de Luanda</b>
            </p>
            @if(!empty($candidato))
            <p class="heade-top-data">
                Recibo de inscrição Provisório Nº <span>{{$candidato->id}}</span>/{{date('Y')}}
            </p>
            @endif
        </div>
        <div style="margin-top:-20px;padding-top:20px">
            @if(!empty($candidato))
            <p class="recibo-info">
                Nome:
                <span style="font-size:12px">
                    <b>{{$candidato->nome}}</b>
                </span>
                <br>
                Luanda <span style="font-size:12px">
                    <b>{{date('d/m/Y')}}</b>
                </span>
            </p>
            @endif
        </div>
        <div style="width:100%;margin-top:-10px;padding-bottom:50px;">
            <div class="float-left">
                <small>
                    Obs: Este recibo tem a validade de 90 dias.
                    Não é válido<br> em emprego e não é prorrogável.
                </small>
                <br>
                <small>
                    Contactos: 930461400/914594261
                </small>
            </div>
            <div class="float-right text-center">
                <span style="font-size:13px;text-align:center;">Funcionário e carimbo</span><br>
                <small style="text-align:center;font-size:13px;">
                    <b>Delfino Torres</b>
                <small>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 fotter_ver-container">
        <div class="float-right">
            <a target="_blank" href="{{route('recibo',$candidato->id)}}" class="btn btn-destaque">
                Gerar PDF <i class="fa fa-file-pdf-o"></i>
            </a>
        </div>
    </div>
</div>