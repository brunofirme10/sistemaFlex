<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Laratrust\Models\LaratrustRole;

// O Role  modelo possui três atributos principais:

// name - Nome exclusivo para o papel, usado para pesquisar informações de função na camada de aplicação. Por exemplo: "administrador", "proprietário", "empregado".
// display_name- Nome legível para o papel. Não é necessariamente único e opcional. Por exemplo: "User Administrator", "Project Owner", "Widget Co. Employee".
// description - Uma explicação mais detalhada sobre o que o papel faz. Além disso, opcional.
// Ambos display_namee descriptionsão opcionais; seus campos são anuláveis ​​no banco de dados.


class Role extends LaratrustRole
{
   //
 }

