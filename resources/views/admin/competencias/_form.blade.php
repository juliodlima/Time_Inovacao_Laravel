<div class="input-field">
    <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
    <label>Nome</label>
</div>

<div class="input-field">
    <label>Tipo de Competência</label>
    <br><br>
    <p>
        <label>
            <input name="tipo" type="radio" {{isset($registro->tipo) && $registro->tipo == 'Tecnica' ? 'checked' : ''}} value="Tecnica" />
            <span>Técnica</span>
        </label>
    </p>
    <p>
        <label>
            <input name="tipo" type="radio" {{isset($registro->tipo) && $registro->tipo == 'Comportamental' ? 'checked' : ''}} value="Comportamental" />
            <span>Comportamental</span>
        </label>
    </p>
</div>


