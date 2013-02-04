install:
	@echo " "
	@echo "================================================================="
	@echo "Installation starts on  "`date`
	@echo "================================================================="
	@echo " "
	@ssh fedeisas@fedeisas.webfactional.com "\
	    cd webapps/nucleo && \
	    git checkout . &&\
	    git pull origin master &&\
	    sed -i 's/development/production/' index.php &&\
	    rm application/cache/* \
	"
	@echo "================================================================="
	@echo "Installation finished on "`date`
	@echo "================================================================="
	@echo " "

compress:
	@echo " "
	@echo "================================================================="
	@echo "SCSS and JS build starts on  "`date`
	@echo "================================================================="
	@echo " "
	@compass compile assets/
	@echo "================================================================="
	@echo "SCSS and JS build finished on "`date`
	@echo "================================================================="
	@echo " "


.PHONY: install compress