<!-- Contact Start -->
<section class="pb-120 container" id="contact">
    <div class="col-12 row align-items-center justify-content-center" id="contato">
        <div class="d-flex flex-column col-12 align-items-center justify-content-evenly text-center">
            <h2 class="text-primary h2">Contact</h2>   
            <p class="h4">
                One of our experts will contact you as soon as possible!
            </p>             
            <p class="h6 ">
                Send us your contact details. All your data will be safe and we'll take good care of it.
            </p>
        </div>

        <form class="d-flex row col-12 mt-3 align-items-center justify-content-center" id="form" method="post">

            <div class="row col-10">
                <div class="d-flex flex-column col-12 col-lg-6">
                    <label for="name" class="text-black">Name:</label>
                    <input type="text" name="name" id="nome" class="rounded border-0 bg-secondary mb-2 text-gray p-1" required>
                </div>

                <div class="d-flex flex-column col-12 col-lg-6">
                    <label for="email" class="text-black">E-mail:</label>
                    <input type="email" name="email" id="email" class="rounded border-0 bg-secondary mb-2 text-gray p-1" required>
                </div>
            </div>

            <div class="row col-10">
                <div class="d-flex flex-column col-12 col-lg-6">
                    <label for="empresa" class="text-black">Business name:</label>
                    <input type="text" name="empresa" id="empresa" class="rounded border-0 bg-secondary mb-2 text-gray p-1" required>
                </div>
                <div class="d-flex flex-column col-12 col-lg-6">
                    <label for="tel" class="text-black">Phone:</label>
                    <input type="tel" name="tel" id="tel" class="rounded border-0 bg-secondary mb-2 text-gray p-1" required>
                </div>
            </div>

            <div class="row col-10">
                <div class="d-flex flex-column col-12">
                    <label for="empresa" class="text-black">Services:</label>
                    <select type="select" name="produto-servico" id="produto-servico" class="rounded border-0 bg-secondary mb-3 text-gray p-1" height="36">
                        <optgroup label="Services:">
                            <option value="">Authentication</option>
                            <option value="">Wan</option>
                            <option value="">Deep Inspection</option>
                            <option value="">Sase+</option>
                            <option value="">Check</option>
                            <option value="">Analyser 360</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row col-10">
                <div class="col-12 align-items-center justify-content-center row d-flex">
                    <button type="submit" class="bg-primary rounded text-white col-4 border-0 p-1 mx-auto">Send</button>
                </div>
            </div>
        </form>                  
    </div>

</section>
<!-- Contact End -->