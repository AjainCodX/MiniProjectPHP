<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/heading.php'); ?>


    <main>
        <div class="max-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <form  method="POST" action="/note">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?= $note['id']?>"
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base/7 font-semibold text-gray-900">Edit A Note</h2>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            <div class="col-span-full">
                                <label for="about" class="block text-sm/6 font-medium text-gray-900">Body</label>
                                <div class="mt-2">
                                    <textarea   name="body" id="body" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Here's is an idea for note ..."><?= $note['body'] ?></textarea>
                                </div>
                                <?php if(isset($errors['body'])) : ?>
                                    <p class="text-red-500 text-xm mt-2"><?= $errors['body'] ?></p>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>


                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href='/notes' type="button" class="text-sm/6 font-semibold rounded text-white-900 bg-gray-500 py-1 px-3">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>
            </form>

        </div>
    </main>
<?php require base_path('views/partials/footer.php'); ?>