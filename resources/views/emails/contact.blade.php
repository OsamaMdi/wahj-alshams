<x-mail::message>
# رسالة جديدة من موقع Wahaj Al-shams

**الاسم:** {{ $data['name'] }}  
**البريد الإلكتروني:** {{ $data['email'] }}  
**رقم الهاتف:** {{ $data['phone'] ?? 'غير متوفر' }}  
**الموضوع:** {{ $data['subject'] }}

---

**الرسالة:**

{{ $data['message'] }}

<x-mail::button :url="'mailto:' . $data['email']">
رد على المرسل
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
