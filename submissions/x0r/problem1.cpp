import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.util.StringTokenizer;
import static java.lang.System.out;

class program1 {
	private static BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
	public static void main(String[] args) throws Exception {
		int t = Integer.parseInt(br.readLine());
		while (t-- > 0) {
			String s = br.readLine();
			int o = s.indexOf('$')+1;
			String tmp = "";
			for (; o < s.length(); ++o) {
				char ch = s.charAt(o);
				if (Character.isDigit(ch) || Character.isWhitespace(ch))
					tmp += ch;
				else break;
			}
			String f = "";
			for (char ch : tmp.toCharArray()) {
				if (Character.isDigit(ch)) {
					f += ch;
				}
			}
			o = 0;
			while (o < f.length() && f.charAt(o) == 48) o++;
			if (o == f.length()) {
				System.out.println("$0");
			} else {
				System.out.println("$" + f.substring(o));
			}
		}
	}
}