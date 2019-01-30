<div class="top-search">
                  <form>
                    <div class="top-filter">
                      <div class="close-btn"><i class="dew dew-close"></i></div>
                      <div class="form-group search-name">
                          <input type="text" class="form-control" id="top-search-input" placeholder="Введите название"><button class="search-btn" type="submit" disabled=""><i class="dew dew-search"></i></button>
                      </div>
                          <div class="filter-inputs">
                            <div class="filter-item">
                             <div class="f-title" data-toggle="popover" data-placement="left" data-content="Выберите один или несколько типов нагрузки" data-original-title="" title=""><span>Нагрузка</span></div>
                             <div class="ico_checkbox">
                               <div class="check-item">
                                <input type="checkbox" name="man" id="man">
                                <label for="man"><i data-toggle="popover" data-placement="bottom" data-content="Пешеходное движение с низкой интенсивностью" class="dew dew-man" data-original-title="" title=""></i></label>
                               </div>
                               <div class="check-item">
                                <input type="checkbox" name="mans" id="mans">
                                <label for="mans"><i data-toggle="popover" data-placement="bottom" data-content="Пешеходное движение с высокой интенсивностью" class="dew dew-mans" data-original-title="" title=""></i></label>
                               </div>
                               <div class="check-item">
                                <input type="checkbox" name="car" id="car">
                                <label for="car"><i data-toggle="popover" data-placement="bottom" data-content="Легковые автомобили с массой до 3 тонн" class="dew dew-car" data-original-title="" title=""></i></label>
                               </div>
                               <div class="check-item">
                                <input type="checkbox" name="truck" id="truck">
                                <label for="truck"><i data-toggle="popover" data-placement="bottom" data-content="Грузовые автомобили" class="dew dew-truck" data-original-title="" title=""></i></label>
                               </div>
                               <div class="check-item">
                                <input type="checkbox" name="loader" id="loader">
                                <label for="loader"><i data-toggle="popover" data-placement="bottom" data-content="Погрузчик с пневмоколесами" class="dew dew-loader" data-original-title="" title=""></i></label>
                               </div>
                               <div class="check-item">
                                <input type="checkbox" name="cart" id="cart">
                                <label for="cart"><i data-toggle="popover" data-placement="bottom" data-content="Механические и электрические тележки с пластиковыми колесами" class="dew dew-cart" data-original-title="" title=""></i></label>
                               </div>
                             </div>
                           </div>
                           <div class="filter-item">
                              <div class="f-title" data-toggle="popover" data-placement="left" data-content="Если ширина шва отличается по длине то указываете наибольшую величину" data-original-title="" title=""><span>Ширина шва</span></div>
                              <div class="input-group">
                                <input type="number" min="0" placeholder="введите значение" name="width_shva" class="form-control">
                                <div class="input-group-addon">
                                  <div class="input-group-text">мм</div>
                                </div>
                              </div>
                           </div>
                           <div class="filter-item">
                              <div class="f-title" data-toggle="popover" data-placement="left" data-content="Указывайте суммарную величину деформаций. Например, при деформациях +/-10 мм - их сумма будет 20 мм." data-original-title="" title=""><span>Горизонтальные деформации</span></div>
                              <div class="input-group">
                                <input type="number" placeholder="введите значение" class="form-control">
                                <div class="input-group-addon">
                                  <div class="input-group-text">мм</div>
                                </div>
                              </div>
                           </div>
                           <div class="filter-item">
                              <div class="f-title" data-toggle="popover" data-placement="left" data-content="Профили делятся на 2 основных типа: накладной и закладной" data-original-title="" title=""><span>Тип профиля</span></div>
                              <div class="input-group">
                                <select class="form-control" id="type">
                                   <option value="" hidden="" selected="" disabled="">Выберите тип профиля</option>
                                   <option value="Накладной">накладной</option>
                                   <option value="Закладной">закладной</option>
                                </select>
                              </div>
                           </div>
                          <div class="filter-item">
                              <div class="f-title" data-toggle="popover" data-placement="left" data-content="Укажите расположение профиля" data-original-title="" title=""><span>Расположение</span></div>
                              <div class="input-group">
                                <div class="m-r-10">
                                  <label>
                                    <input class="option-input radio" type="radio" name="location" id="location1" value="Стена/потолок">стена/потолок
                                  </label>
                                </div>
                                <div>
                                  <label>
                                    <input class="option-input radio" type="radio" name="location" id="location2" value="Пол">пол
                                  </label>
                                </div>
                              </div>
                           </div>
                           <div class="filter-item">
                              <div class="f-title" data-toggle="popover" data-placement="left" data-content="Укажите, если будут вертикальные сдвиги плит относительно друг друга." data-original-title="" title=""><label><input class="option-input checkbox" type="checkbox" name="vertdef" id="vertdef" value="Да">Вертикальные деформации</label></div>
                           </div>
                          <div class="filter-item m-b-0">
                              <div class="f-title" data-toggle="popover" data-placement="left" data-content="Укажите, если требуется гидроизоляция шва" data-original-title="" title=""><label><input type="checkbox" class="option-input checkbox" name="water" id="water" value="Да">Водонепроницаемость</label></div>
                           </div>

                          </div>
                          <div class="top-search-results">
                              <ul>
                                <li><a href="#">BR 91</a></li>
                                <li><a href="#">BR 93</a></li>
                                <li><a href="#">BR 94</a></li>
                                <li><a href="#">BR 95</a></li>
                                <li><a href="#">CR 30</a></li>
                                <li><a href="#">CRG 32</a></li>
                                <li><a href="#">CRG 33</a></li>
                                <li><a href="#">CRG 34</a></li>
                                <li><a href="#">CRG 35</a></li>
                                <li><a href="#">FV 63/20</a></li>
                                <li><a href="#">SG 31/35</a></li>
                                <li><a href="#">SG 31/50</a></li>
                                <li><a href="#">SG 32</a></li>
                              </ul>
                          </div>
                        </div>
                  </form>
                </div>
