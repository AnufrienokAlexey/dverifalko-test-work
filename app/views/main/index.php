<h3>Главная страница</h3>

<h4>Конфигуратор входной двери</h4>
<div class="main flex">
    <div class="doors flex">
        <div class="door">
            <div class="door_left flex">
                <div class="left-handle"></div>
            </div>
            <p class="door__description">Вид снаружи</p>
        </div>
        <div class="door">
            <div class="door_right flex opening-active">
                <div class="right-handle"></div>
            </div>
            <p class="door__description">Вид изнутри</p>
        </div>

    </div>
    <div class="params">
        <h4 class="params-title">Параметры</h4>
        <form action="sendform" class="form-control" method="post">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="color" class="col-form-label">Цвет покраски</label>
                </div>
                <div class="col-auto">
                    <select class="form-select" aria-label="Default select example" name="color" id="color" required>
                        <option selected disabled></option>
                        <option value="red">Красный</option>
                        <option value="green">Зеленый</option>
                        <option value="blue">Синий</option>
                    </select>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="skin_color" class="col-form-label">Цвет пленки</label>
                </div>
                <div class="col-auto">
                    <select class="form-select" aria-label="Default select example" name="skin_color" id="skin_color">
                        <option selected disabled></option>
                        <option value="red">Красный</option>
                        <option value="green">Зеленый</option>
                        <option value="blue">Синий</option>
                    </select>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="handle_color" class="col-form-label">Цвет ручки</label>
                </div>
                <div class="col-auto">
                    <select class="form-select" aria-label="Default select example" name="handle_color" id="handle_color">
                        <option selected disabled></option>
                        <option value="red">Красный</option>
                        <option value="green">Зеленый</option>
                        <option value="blue">Синий</option>
                    </select>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="handle_color" class="col-form-label">Ширина двери</label>
                </div>
                <div class="col-auto">
                    <input type="number" min="100" max="1500" step="10" id="width" name="width">
                    <span>мм</span>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="handle_color" class="col-form-label">Высота двери</label>
                </div>
                <div class="col-auto">
                    <input type="number" min="100" max="2500" step="10" id="height" name="height">
                    <span>мм</span>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="handle_color" class="col-form-label">Открывание</label>
                </div>
                <div class="col-auto">
                    <select class="form-select" aria-label="Default select example" name="opening" id="opening">
                        <option selected disabled></option>
                        <option value="left-opening">Левое</option>
                        <option value="right-opening">Правое</option>
                    </select>
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="handle_color" class="col-form-label">Аксессуары</label>
                </div>
                <div class="col-auto">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" name="accessories[]" value="A1">
                        <label class="btn btn-outline-primary" for="btncheck1">A1</label>

                        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" name="accessories[]" value="A2">
                        <label class="btn btn-outline-primary" for="btncheck2">A2</label>

                        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" name="accessories[]" value="A3">
                        <label class="btn btn-outline-primary" for="btncheck3">A3</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Отправить комплектацию</button>
        </form>
    </div>
</div>