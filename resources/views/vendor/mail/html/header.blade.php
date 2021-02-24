<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://wash24.in/img/notification-logo.png" class="logo" alt="Wash24">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
