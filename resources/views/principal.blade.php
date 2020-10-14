@extends('layouts.layout')

@section('title','Evaluación Diagnostico')
@section('content')






<nav class="navbar navbar-light bg-light">
    <span class="navbar-text">
     BARRA DE NAVEGACIÓN
    </span>
  </nav>


<div class="card">

    <div class="card-header">
      Evaluación Diagnóstico
    </div>
    <div class="card-body">
      <h5 class="card-title">Evaluación diagnóstico</h5>
      <p class="card-text">Ingresa acá para realizar la evaluación diagnótico por primera vez</p>
      <a href= {{route('evaluador.crear') }} class="btn btn-success">Crear Evaluador</a>
  </div>
