<div class="modal fade" id="calculate" tabindex="-1" role="dialog" aria-labelledby="calculateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                    <h3 class="text-center w-100">
                        Рассчёт стоимости услуги
                    </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?php echo $home;?>php/calculate.php" method="post">

                    <div class="form-group">
                        <label >Марка и модель автомобиля*</label>
                        <input class="form-control" type="text" placeholder="Введите марку автомобиля" name="mark">
                    </div>

                    <div class="form-group">
                        <label >Ваше имя*</label>
                        <input class="form-control" type="text" placeholder="Введите имя" name="name">
                    </div>

                    <div class="form-group">
                        <label >Телефон*</label>
                        <input class="form-control" type="text" placeholder="Введите телефон" name="phone">
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="yes" name="rules">
                        <label class="form-check-label">
                            Я принимаю условия соглашения
                        </label>
                    </div>

                    <input style="display:none" type="text" name="check" id="check" value="">
                    
                    <div class="btnbox">
                        <button type="submit" class="btn" >Отправить заявку</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>