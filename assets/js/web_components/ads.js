const head = document.querySelector('head')
const body = document.querySelector('body')


const headTag = document.createElement('noscript')
headTag.textContent =`
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '
    https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MGKFMTLB');</script>
    <!-- End Google Tag Manager -->
` 



const bodyTag = document.createElement('noscript')
bodyTag.textContent ="<!-- Google Tag Manager (noscript) --><noscript><iframe src='https://www.googletagmanager.com/ns.html?id=GTM-MGKFMTLB'height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript><!-- End Google Tag Manager (noscript) -->"


head.append(headTag)
body.append(bodyTag)

if (head.append(headTag)){
    console.log('Tag adicionada')
}

if (body.append(bodyTag)){
    console.log('Tag adicionada')
}