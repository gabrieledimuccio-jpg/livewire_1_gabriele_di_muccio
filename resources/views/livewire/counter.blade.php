<div>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center align-items-center mt-5">
                <div class="card shadow" style="width: 22rem;"> 
                    <div class="card-body p-4 text-center mt-3">
                        
                        <div class="bg-dark text-white border border-secondary rounded p-3 mb-4 shadow-sm mx-auto" style="max-width: 160px;">
                            <p class="small mb-1">Valore Attuale</p>
                            <span class="display-4 fw-bold text-success">{{ $count }}</span>
                        </div>
                        
                        
                        <div class="d-flex justify-content-center gap-2 mb-2">
                            <button type="button" class="btn btn-primary px-3" wire:click="increment">+1</button>
                            <button type="button" class="btn btn-primary px-3" wire:click="decrement">-1</button>
                        </div>
                        
                        
                        <div class="d-flex justify-content-center gap-2">
                            <button type="button" class="btn btn-outline-primary px-3" wire:click="incrementByNum({{ $mynum }})">+5</button>
                            <button type="button" class="btn btn-outline-primary px-3" wire:click="decrementByNum({{ $mynum }})">-5</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
