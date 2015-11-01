<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="./img/background2.jpg" alt="Unsplashed background img 2"></div>
</div>
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h4>Contact Us</h4>
                <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat.</p>
                <div class="row">
                    <?= $this->Form->create('Profiling', array('action' => '/send', 'class' => 'col s12', 'id'=>'form-contact')); ?>
                    <div class="row">
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <?=
                                $this->Form->input('first-name', array(
                                    'templates' => array(
                                        'inputContainer' => '{{content}}'
                                    ),
                                    'class' => 'validate',
                                    'length' => '120'
                                ))
                                ?>
                            </div>
                            <div class="input-field col s6">
                                <?=
                                $this->Form->input('last-name', array(
                                    'templates' => array(
                                        'inputContainer' => '{{content}}'
                                    ),
                                    'class' => 'validate',
                                    'length' => '120'
                                ))
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">today</i>
                                <?=
                                $this->Form->input('birthdate', array(
                                    'templates' => array(
                                        'inputContainer' => '{{content}}'
                                    ),
                                    'class' => 'datepicker'
                                ))
                                ?>
                            </div>
                            <?php
//                            $this->Form->radio('gender', array(
//                                'male' => 'Male',
//                                'female' => 'Female'
//                            ));
                            ?>

                            <div class="input-field col s3">
                                <input name="gender" type="radio" id="male" value="m"/>
                                <label for="male">Male</label>
                            </div>
                            <div class="input-field col s3">
                                <input name="gender" type="radio" id="female" value="f"/>
                                <label for="female">Female</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">email</i>
                                <?=
                                $this->Form->input('mail', array(
                                    'templates' => array(
                                        'inputContainer' => '{{content}}'
                                    ),
                                    'class' => 'validate',
                                    'length' => '120'
                                ))
                                ?>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">phone</i>
                                <?=
                                $this->Form->input('cell', array(
                                    'templates' => array(
                                        'inputContainer' => '{{content}}'
                                    ),
                                    'class' => 'validate',
                                    'type' => 'tel'
                                ))
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s3">
                                <input id="accept" name="accept" type="checkbox" class="filled-in" />
                                <label for="accept">Yes, I accept!</label>
                            </div>
                            <div class="input-field col s9">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?= $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
        </div>
    </div>
    <div class="parallax">
        <img src="./img/background3.jpg" alt="Unsplashed background img 3">
    </div>
</div>
<div id="parallax-background"></div>


