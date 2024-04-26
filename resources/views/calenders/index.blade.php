<x-app-layout>
    <button class="bg-green-500 rounded-md text-gray-100 w-20"><a href="{{ route('calenders.create') }}">Create Event</a></button>
   <div id="calendar"></div>
   @push('scripts')
   <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridWeek',
                    selectable: true,
                    events: @json($events),
                    eventContent: function(arg) {
                        var startTime = new Date(arg.event.start).toLocaleTimeString([], {
                            hour: '2-digit',
                            minute: '2-digit'
                        });
                        var endTime = new Date(arg.event.end).toLocaleTimeString([], {
                            hour: '2-digit',
                            minute: '2-digit'
                        });
                        var html = `
                    <div>
                        <div>${startTime} - ${endTime}</div>
                        <div>${arg.event.title}</div>
                    </div>
                `;
                        return {
                            html: html
                        };
                    },
                    eventClick: function(info) {
                        var startTime = new Date(info.event.start).toLocaleTimeString([], {
                            hour: '2-digit',
                            minute: '2-digit'
                        });
                        var endTime = new Date(info.event.end).toLocaleTimeString([], {
                            hour: '2-digit',
                            minute: '2-digit'
                        });
                        alert('Event: ' + info.event.title + '\n' +
                            'Start time: ' + startTime + '\n' +
                            'End time: ' + endTime);
                    }
                });
                calendar.render();
            });
        </script>

        
    @endpush
    
</x-app-layout>
