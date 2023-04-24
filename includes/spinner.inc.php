<style>
	/* Spinner */
	#spinner {
	  position: fixed;
	  top: 0;
	  left: 0;
	  width: 100%;
	  height: 100%;
	  background-color: rgba(255, 255, 255, 1);
	  z-index: 9999;
	}

	.spinner-icon {
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  transform: rotate(0deg);
	  border-radius: 50%;
	  width: 40px;
	  height: 40px;
	  border: 4px solid rgba(0, 0, 0, 0.2);
	  border-top-color: #000000;
	  animation: spinner 0.8s ease-in-out infinite;
	}

	@keyframes spinner {
	  to { transform: rotate(360deg); }
	}
	/* Spinner end */
</style>

<div id="spinner">
  <div class="spinner-icon"></div>
</div>