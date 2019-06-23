{{ csrf_field() }}
@if(isset($orbitasi))
    {!! Form::hidden('id', $orbitasi->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Uraian</label>
        {!! Form::text('uraian', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Jarak ke Kota']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Keterangan</label>
        {!! Form::text('keterangan', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 15 KM']) !!}
</div>                             
<div>
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>