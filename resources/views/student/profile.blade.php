@extends('layouts.master')

@section('content')
<style>
    .liProfil{
        font-size: 20px;
        line-height: 52px;
    }
</style>

<div class="d-flex flex-column justify-content-center">
    <div class="d-flex flex-row justify-content-center align-items-center" style="margin-top:50px; margin-bottom: 20px;">
        
        {{-- <div class="d-flex flex-column align-items-center">
            <img src="/storage/profil_images/{{ $user->profil_img }}" alt="student" width="260">
        </div> --}}
        
        <ul>
            <li class="liProfil"><b>Nom :</b> {{ auth()->user()->name }}</li>
            {{-- <li class="liProfil"><b>Prenom :</b> {{ $user->prenom }}</li>
            <li class="liProfil"><b>Date de naissance :</b> {{ $user->dateNaissance }}</li>
            <li class="liProfil"><b>Téléphone :</b> {{ $user->telephone }}</li>
            <li class="liProfil"><b>Filière :</b> {{ $user->filiere }}</li> --}}
            <li class="liProfil"><b>Email :</b> {{ auth()->user()->email }}</li>
            {{-- <a href="javascript:void(0)"  class="btn btn-primary" style="padding: 5px 50px;" onclick="editStudent({{ $user->id }})">
                <i class="far fa-edit"></i>
                Modifier Mes Infos
            </a> --}}
        </ul>
    </div>
    {{-- <a href="{{ Route('student.pdf') }}" class="btn btn-warning">
      <i class="fas fa-file-pdf"></i>
      Télécharger <b>PDF</b>
    </a> --}}
  </div>

  @endsection