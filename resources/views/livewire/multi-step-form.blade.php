<!-- multi-step-form.blade.php -->

<div>
    @if ($currentStep === 1)
        <livewire:basic-informations wire:key="basic-informations" />
    @else
        <livewire:result-type wire:key="result-type" />
    @endif

    <div>
        Progress: Step {{ $currentStep }} of 2
        <div style="width: {{ ($currentStep / 2) * 100 }}%;">Progress Bar</div>
    </div>
</div>

