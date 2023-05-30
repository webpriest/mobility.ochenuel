<section class="schedule-section style-two">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Our Upcoming Events</span>
            <h2>Schedule</h2>
        </div>
        
        <div class="schedule-tabs style-two tabs-box">
            <div class="btns-box">
                @if(!empty($events))
                <ul id="tab-button" class="tab-buttons clearfix" wire:ignore>
                    @foreach($events as $event)
                    <li class="tab-btn" data-tab="#{{ $event['id'] }}" wire:click="chosen('{{ $event['id'] }}', '{{ $event['name'] }}')" :key="$event['id']">
                        <span class="day">{{ $event['name'] }}</span>
                        <span class="date">{{ $event['day'] }}</span>
                        <span class="month">{{ $event['month'] }}</span> {{ $event['year'] }}
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <livewire:front.home.schedule-detail />
        </div>
    </div>
</section>
@push('scripts')
    <script>
        const parent = document.getElementById('tab-button');
        const children = parent.children;

        children[0].classList.add('active-btn');
        // firstChild.classList.add('active-btn');

        for (let i = 0; i < children.length; i++) {
        children[i].addEventListener('click', function() {
            // Remove the 'active' class from all siblings
            for (let j = 0; j < children.length; j++) {
                if (children[j] !== this) {
                    children[j].classList.remove('active-btn');
                }
            }
            // Add the 'active' class to the clicked element
            this.classList.add('active-btn');
        });
        }
    </script>
@endpush