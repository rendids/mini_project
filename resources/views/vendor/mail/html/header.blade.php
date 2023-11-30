@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('assets/images/Group.svg') }}" class="logo" alt="" style="width: 1500px; height: 1500px;">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
