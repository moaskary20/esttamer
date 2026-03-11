/// Strips HTML and returns plain text for display (e.g. article descriptions).
/// Handles malformed HTML and Word/Office exports that may show raw tags/attributes.
String stripHtmlToPlain(String html) {
  if (html.isEmpty) return '';
  // 1. Remove all HTML tags
  String text = html.replaceAll(RegExp(r'<[^>]*>'), ' ');
  // 2. Remove common HTML attribute fragments that may appear as text
  //    (e.g. when content is mangled: "p class=\"p1\" dir=\"RTL\" style=\"...\"")
  text = text
      .replaceAll(RegExp(r'''\b(class|style|dir|id|name|lang)\s*=\s*"[^"]*"''', caseSensitive: false), '')
      .replaceAll(RegExp(r"""\b(class|style|dir|id|name|lang)\s*=\s*'[^']*'""", caseSensitive: false), '')
      .replaceAll(RegExp(r'\b[Mm]so[\w-]*\b'), '')
      .replaceAll(RegExp(r'\b(text-align|line-height|direction|unicode-bidi|margin|padding|font-size|font-family|text-justify|mso-[\w-]+)\s*:\s*[^;}"]+[;]?', caseSensitive: false), '')
      .replaceAll(RegExp(r'\b(MsoNormal|MsoListParagraph)\b', caseSensitive: false), '')
      .replaceAll(RegExp(r'''<\s*\w+[^>]*>'''), ' ');
  // 3. Decode common entities
  text = text
      .replaceAll('&nbsp;', ' ')
      .replaceAll('&amp;', '&')
      .replaceAll('&lt;', '<')
      .replaceAll('&gt;', '>')
      .replaceAll('&quot;', '"')
      .replaceAll('&#39;', "'")
      .replaceAll(RegExp(r'&#\d+;'), ' ');
  // 4. Collapse whitespace and trim
  return text.replaceAll(RegExp(r'\s+'), ' ').trim();
}
