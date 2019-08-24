<div class="input-field">
    <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
    <label>Nome</label>
</div>

<div class="input-field">
    <input type="date" name="data_nascimento" value="{{isset($registro->data_nascimento) ? $registro->data_nascimento : ''}}">
    <label>Data de Nascimento</label>
</div>

<div class="input-field">
    <input type="text" name="idade" value="{{isset($registro->idade) ? $registro->idade : ''}}">
    <label>Idade</label>
</div>

<div class="input-field">
    <input type="text" name="endereco" value="{{isset($registro->endereco) ? $registro->endereco : ''}}">
    <label>Endereço</label>
</div>

<div class="input-field">
    <input type="text" name="telefone" value="{{isset($registro->telefone) ? $registro->telefone : ''}}">
    <label>Telefone</label>
</div>

<div class="input-field">
    <input type="text" name="celular" value="{{isset($registro->celular) ? $registro->celular : ''}}">
    <label>Celular</label>
</div>

<div class="input-field">
        <label>Sexo</label>
        <br>
    <p>
        <label>
            <input name="sexo" type="radio" {{isset($registro->sexo) && $registro->sexo == 'masculino' ? 'checked' : ''}} value="masculino" />
            <span>Masculino</span>
        </label>
    </p>
    <p>
        <label>
            <input name="sexo" type="radio" {{isset($registro->sexo) && $registro->sexo == 'feminino' ? 'checked' : ''}} value="feminino" />
            <span>Feminino</span>
        </label>
    </p>
</div>