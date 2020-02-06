@extends('layouts.app')

@section('content')


<div class="container contact-form"  style="margin-top:100px">

  </div>
    <form method="post" class="was-validated" action="{{ route('contato.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Contate-nos</h3>
            <example-component></example-component>
        <div class="row">
            <div class="col-md-6">
                <label for="nome">Nome</label>     
                <div class="form-group {{ $errors->has('nome') ? ' has-error' : '' }}">
                    <input type="text"  name="nome" class="form-control is-valid" placeholder="Seu Nome *"  required />

                </div>

                <label for="telefone">Telefone</label>     
                <div class="form-group {{ $errors->has('telefone') ? ' has-error' : '' }}">
                    <input type="text"  name="telefone" class="form-control is-valid" placeholder="Seu telefone *"  required />

                </div>

                <label for="email">Email</label>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email"  name="email" class="form-control" placeholder="Seu Email *"  required />
                </div>

                <label for="arquivo">Anexo</label>
                <div class="form-group {{ $errors->has('arquivo') ? ' has-error' : '' }}">
                    <input type="file"  name="arquivo" class="form-control" placeholder="Seu Nome *"  required />

                </div>
                <div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Enviar Formulário
						
						</span>
					</button>
				</div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="form-group {{ $errors->has('mensagem') ? ' has-error' : '' }}">
                    <textarea name="mensagem" class="form-control" placeholder="Seu mensagem *" style="width: 100%; height: 150px;" required></textarea>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

