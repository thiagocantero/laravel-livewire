<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Componentização Laravel + Livewire</title>
    @livewireStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.0/tailwind.min.css"/>
</head>
<body>    
<div class="container">    
    <div class="card">
      <div class="card-header">
      Exemplo de Componentização Laravel + Livewire
      </div>
      <div class="card-body">
        @livewire('user-pagination')
      </div>
    </div>        
</div>    
</body>  
@livewireScripts  
</html>