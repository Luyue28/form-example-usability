<x-main-nav-bg>
    <div class="columns">
        <div class="column"></div>
        <div class="column">
            <div class="card mt-3 mb-5">
                <div class="card-content">
                    <div>
                        <h1 class="has-text-centered mb-5 title is-3">Student Info</h1>
                    </div>
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="e.g Alex Smith">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input" type="email" placeholder="e.g. alexsmith@gmail.com">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Phone</label>
                            <div class="field is-expanded">
                                <div class="field has-addons">
                                    <p class="control">
                                        <a class="button is-static">
                                            +31
                                        </a>
                                    </p>
                                    <p class="control is-expanded">
                                        <input class="input" type="tel" placeholder="123456789">
                                    </p>
                                </div>
                                <p class="help">* Do not enter the first zero</p>
                            </div>
                    </div>
                    <div class="field">
                        <label class="label">Gender</label>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <div class="select is-fullwidth">
                                        <select>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea class="textarea has-fixed-size" placeholder="e.g. what is the living cost in the NL?" rows="2"></textarea>
                        </div>
                        <p class="help">* Leave your questions of the ICT study programme.</p>
                    </div>
                    <div class="field is-grouped is-flex is-justify-content-center is-align-items-center is-flex-direction-column">
                        <div class="control">
                            <button class="button is-link">Submit</button>
                            <button class="button is-gray is-light">
                                <a class="has-text-grey-dark" href="{{route('welcome')}}">Cancel</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column"></div>
    </div>
</x-main-nav-bg>
