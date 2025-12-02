<div class="fi-sidebar-user-ctn w-full px-0 py-4 flex justify-center">
    {{-- Avatar for logged-in user, centered horizontally in the sidebar (works in collapsed/expanded modes) --}}
    <div class="w-14 flex items-center justify-center">
        {{-- Filament avatar component provides fallback initials if no image exists. Add alt for accessibility. --}}
        <x-filament-panels::avatar.user :user="auth()->user()" loading="lazy" class="w-14 h-14 rounded-full object-cover" :alt="auth()->user()?->name ?? 'Usuário'" />
    </div>
</div>
