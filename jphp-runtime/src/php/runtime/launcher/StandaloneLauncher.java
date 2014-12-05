package php.runtime.launcher;

import php.runtime.loader.StandaloneLoader;

public class StandaloneLauncher {

    public static void main(String[] args) {
        StandaloneLoader loader = new StandaloneLoader();
        loader.setClassLoader(Thread.currentThread().getContextClassLoader());
        loader.run();
    }
}
