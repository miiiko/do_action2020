// document.addEventListener('DOMContentLoaded', function() {
// 	let calendarEl = document.getElementById('calendar');
// 	let calendar = new FullCalendar.Calendar(calendarEl, {
// 		initialView: 'dayGridMonth'　// オプション　（月表示）
// 	});
// 	calendar.render();　// カレンダーの初期化（再レンダリング）
// });

document.addEventListener('DOMContentLoaded', function() {
	var calendarEl = document.getElementById('calendar');
	var calendar = new FullCalendar.Calendar(calendarEl, {
		timeZone: 'Asia/Tokyo',
		locale: 'ja',
		googleCalendarApiKey: 'AIzaSyAG_pywxpdyq0wloTVN36Zgpn0tXTaPsX8',
		eventSources: [
			{
				googleCalendarId: 'j956an23j4fetifsot1u93b88o@group.calendar.google.com',
				className: 'cal-cat1'
			},
			{
				googleCalendarId: '4esnhfe54vgfqbq35kn93trcio@group.calendar.google.com',
				className: 'cal-cat2'
			},
			{
				googleCalendarId: '7i325q6sh638dre50l2nfcspeo@group.calendar.google.com',
				className: 'cal-cat3'
			}
		]
	});
	calendar.render();
});
